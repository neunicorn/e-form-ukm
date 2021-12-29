$(document).ready(function () {
    $("#type").change(function () {
        var val = $(this).val();
        if (val == "FST") {
            $("#size").html("<option value='Agribisnis'>Agribisnis</option><option value='TI'>Teknik informatika</option><option value='SI'>Sistem Informasi</option><option value='Matematika'>Matematika</option><option value='Biologi'>Biologi</option><option value='Kimia'>Kimia</option><option value='Fisika'>Fisika</option><option value='Pertambangan'>Teknik Pertambangan</option>");
        }

        else if (val == "FEB") {
            $("#size").html("<option value='Manajemen'>Manajemen</option><option value='Akutansi'>Akutansi</option><option value='E_Pembangunan'>Ekonomi Pembangunan</option><option value='E_Syariah'>Ekonomi Syariah</option><option value='P_Syariah'>Perbankan Syariah</option>");
        }

        else if (val == "FISIP") {
            $("#size").html("<option value='Sosiologit'>Sosiologit</option><option value='I_Politik'>Ilmu Politik</option><option value='HI'>Hubungan Internasional</option>");
        }

        else if (val == "item0") {
            $("#size").html("<option value=''>--select one--</option>");
        }
    });
});