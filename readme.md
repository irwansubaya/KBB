# README


untuk menambahkan file baru di dalam index
    
    git add .
    

untuk melihat perubahan file mana saja yang berubah di project local
    
    git status
    
untuk menandai/commit file
    
    git commit -sam "Commit message"

untuk melakukan push remote server, pastikan perubahan file yang
di project local sudah di commit

    git push origin master

untuk melakukan update dari remote server ke project local

    git pull origin master
    
apabila terjadi conflik, hapus file yang konflik
hilangkan blok yang tampil
        contoh :
        <<<<<<< HEAD
	'cus_kode_cabang' => array('Kode Cabang', FALSE,'integer'),
        'cus_email' => array('Email', TRUE, 'valid_email'),
	'cus_tanggal_input' => array('Tanggal Input Customer', TRUE),
        'cus_admin_input' => array('Nama Admin', TRUE)
        =======
        .......(data tidak boleh di hapus)
        >>>>>>> 5b2ccb39ce932a914e1d28f433daa8983a5a5ef6

    
    git commit -a (enter)
    esc
    :wq (enter)
    
