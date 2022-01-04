<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IC_post
{
  	protected 	$CI;

	public function __construct()
	{
       	$this->CI =& get_instance();
	}

	/* Ambil data author
	** @param uid
	*/
	public function post_author($uid) {
		$author = $this->Ambil->getByParam('users', array('id_user'=>$uid));
		return $author;
	}


	/* Post URL
	** @param array()
	*/
	public function post_url($post) {
    	$phpdate = strtotime($post->post_date);

		$str = date('Y/m', $phpdate ); // Dalam format 2015/2/
		$slug = site_url('baca/'.$str.'/'.$post->post_slug.'');

		return $slug;
	}
	/* Post URL
	** @param array()
	*/
	public function post_slug($post) {
    	$phpdate = strtotime($post->post_date);

		$str = date('Y/m', $phpdate ); // Dalam format 2015/2/
		$slug = 'read/'.$str.'/'.$post->post_slug.'';

		return $slug;
	}

	/*
	* Ambil Post Tags
	* $param id
	*/
	public function post_tags($id) {
		$tags = $this->CI->tags_m->get_where(array('post_id'=>$id));
		if (!count($tags)) {
			return false;
		}
		foreach ($tags as $tag) {
			$result[] = $tag->tag_name;
		}
		return $result;
	}

	/*
	* Ambil Komentar Post
	* $param id
	*/
	public function comment_reply($parent) {
		$comments = $this->CI->comments_m->get_where(array(
			'comment_approved'=>1, 'comment_parent'=>$parent
			));

		return $comments;
	}

	/*
	* Diskus Identifier
	* param $id
	* return String
	*/
	public function disqusIdentifier($id) {
		$data = $this->CI->posts_m->get($id, TRUE);
		$identifier = 'identifier_'.$data->post_type.'_'.$data->id.'';

		return $identifier;
	}

	public function quickSelectCat($limit, $cat=NULL)
	{
		$where = array(
			'category.id_category' => $cat,
			'post_status' => 'publish',
			);

		return $this->CI->posts_m->get_limit($limit, $where);
	}

	public function quickSelectSubCat($limit, $cat=NULL)
	{
		$where = array(
			'sub_category.id_category' => $cat,
			'post_status' => 'publish',
			);

		return $this->CI->posts_m->get_limit($limit, $where);
	}

	/*
	* Dynamic Menu
	*/

	public function mainNav()
	{
		$cat = $this->CI->category_m->get_where(array('parent'=>0));
		foreach ($cat as $parent) {
			$list  = "";
			$sub = $this->CI->category_m->get_where(array('parent'=>$parent->id_category));


			if (count($sub)) {
				$list .= '<li class="sf-mega-parent">';
				$list .= '<a href="'.site_url('berita/'.text2slug($parent->category_name).' ').'">'.$parent->category_name.'</a>';
				$list .= '<div class="sf-mega"><div class="prl-grid prl-grid-divider">';
				$list .= '<div class="prl-span-3"><ul class="prl-list prl-list-line sf-mega-list">';
				foreach ($sub as $subparent) {
					$list .= '<li>';
					$list .= '<a href="'.site_url('berita/'.text2slug($subparent->category_name).' ').'">'.$subparent->category_name.'</a>';
					$list .= '</li>';
				}
				$list .= '</ul></div>';
				// Tampilkan Post Terbaru Untuk Sub Kategori
				$this->CI->load->library(array('img'));
				$post = $this->CI->posts_m->get_limit(3, array('post_category'=>$parent->id_category));
				foreach ($post as $post) {
					$list .='<div class="prl-span-3"><article class="prl-article">';
					$list .= ''.$this->CI->img->rimg("assets/images/$post->post_image", array('height'=>152, 'width'=>228, 'crop'=>true, 'alt'=> $post->post_title)).'';
					$list .='<h3 class="prl-article-title"><a class="" href="'.$this->post_url($post).'">'.$post->post_title.'</a><span class="prl-badge prl-badge-warning">'.$post->sub_category_name.'</span></h3>';
					$list .='</article></div>';
				}
				

				$list .= '</div></div>';
				$list .= '</li>';
			} else{
				$list .= '<li>';
				$list .= '<a href="'.site_url('berita/'.text2slug($parent->category_name).' ').'">'.$parent->category_name.'</a>';
				$list .= '</li>';
			}



			echo $list;
		}

		

	}

	public function mobileNav()
	{
		$cat = $this->CI->category_m->get_where(array('parent'=>0));
		foreach ($cat as $parent) {
			$list  = "";
			$sub = $this->CI->category_m->get_where(array('parent'=>$parent->id_category));


			if (count($sub)) {
				$list .= '<li class="nav-item">';
				$list .= '<a href="'.site_url('berita/'.text2slug($parent->category_name).' ').'">'.$parent->category_name.'</a>';
				$list .= '';
				$list .= '<ul class="nav-submenu">';
				foreach ($sub as $subparent) {
					$list .= '<li class="nav-submenu-item">';
					$list .= '<a href="'.site_url('berita/'.text2slug($subparent->category_name).' ').'">'.$subparent->category_name.'</a>';
					$list .= '</li>';
				}
				$list .= '</ul>';
				$list .= '</li>';

			} else{
				$list .= '<li class="nav-item">';
				$list .= '<a href="'.site_url('berita/'.text2slug($parent->category_name).' ').'">'.$parent->category_name.'</a>';
				$list .= '</li>';
			}



			echo $list;
		}

		

	}

}

/* End of file IC_post.php */
/* Location: ./application/libraries/IC_post.php */
