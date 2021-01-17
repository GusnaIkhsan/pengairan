// Halaman Tambah
$('#input_menu').select2();

// Halaman Edit
$('#input_menu_edit').select2();
$('#input_menu_edit').val($("#id_halaman").val()).trigger('change');