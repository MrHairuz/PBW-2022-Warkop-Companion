function pesan(id) {
    document.getElementById(id).innerHTML =
    '<input type="hidden" name="' + id + '" value="1">' +
    '<a class="btn btn-danger" onclick="batalkanPesanan(\'' + id + '\')">Batalkan Pesanan</a>';
}

function batalkanPesanan(id) {
    document.getElementById(id).innerHTML =
    '<input type="text" name="' + id + '" value="0">' +
    '<a class="btn btn-success" onclick="pesan(\'' + id + '\')">Pesan</a>';
}
