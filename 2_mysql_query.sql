SELECT mhs_nama, MAX(nilai)
FROM tb_mahasiswa
	JOIN tb_mahasiswa_nilai ON tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id
    JOIN tb_matakuliah ON tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id
WHERE mk_kode = 'MK203'