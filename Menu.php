<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'kades', 
			'label' => 'Kades', 
			'icon' => '<i class="fa fa-user "></i>','submenu' => array(
		array(
			'path' => 'kades/Index', 
			'label' => 'Kades', 
			'icon' => '<i class="fa fa-user "></i>'
		),
		
		array(
			'path' => 'kades/password', 
			'label' => 'Password', 
			'icon' => ''
		)
	)
		),
		
		array(
			'path' => 'sekdes', 
			'label' => 'Sekdes', 
			'icon' => '<i class="fa fa-user "></i>'
		),
		
		array(
			'path' => 'kaur_umum', 
			'label' => 'Kaur Umum', 
			'icon' => '<i class="fa fa-user "></i>','submenu' => array(
		array(
			'path' => 'kaur_umum/Index', 
			'label' => 'Kaur Umum', 
			'icon' => '<i class="fa fa-user "></i>'
		),
		
		array(
			'path' => 'kaur_umum/password', 
			'label' => 'Password', 
			'icon' => ''
		)
	)
		),
		
		array(
			'path' => 'rt', 
			'label' => 'Rt', 
			'icon' => '<i class="fa fa-user "></i>'
		),
		
		array(
			'path' => 'masyarakat', 
			'label' => 'Masyarakat', 
			'icon' => '<i class="fa fa-users "></i>'
		),
		
		array(
			'path' => 'sensus_penduduk', 
			'label' => 'Sensus Penduduk', 
			'icon' => '<i class="fa fa-users "></i>'
		),
		
		array(
			'path' => 'pengguna', 
			'label' => 'Pengguna', 
			'icon' => '','submenu' => array(
		array(
			'path' => 'pengguna/Index', 
			'label' => 'Pengguna', 
			'icon' => ''
		),
		
		array(
			'path' => 'pengguna/password', 
			'label' => 'Password', 
			'icon' => ''
		)
	)
		),
		
		array(
			'path' => 'kaur_umum/password', 
			'label' => 'Password', 
			'icon' => ''
		),
		
		array(
			'path' => 'kades/password', 
			'label' => 'Password', 
			'icon' => ''
		)
	);
		
	
	
}