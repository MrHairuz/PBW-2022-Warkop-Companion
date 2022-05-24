function pesan(id) {
    document.getElementById(id).innerHTML =
    '<input type="hidden" name="' + id + '" value="1">' +
    '<a class="btn btn-danger" onclick="batalkanPesanan(\'' + id + '\')">Batalkan Pesanan</a>';
}

function batalkanPesanan(id) {
    document.getElementById(id).innerHTML =
    '<input type="hidden" name="' + id + '" value="0">' +
    '<a class="btn btn-success" onclick="pesan(\'' + id + '\')">Pesan</a>';
}

function pesanFurnitur() {
    document.getElementById('furnitur').innerHTML = '<a class="btn btn-danger" onclick="batalkanPesanFurnitur()">Batalkan Pesan</a>';
}

function batalkanPesanFurnitur() {
    document.getElementById('furnitur').innerHTML = '<a href="#persediaan" class="btn btn-success">Pesan</a>';
    batalkanFurnitur();
}

function batalkanFurnitur() {
    document.getElementById('persediaan_meja').innerHTML =
    '<div class="input-group mb-3">' +
    '<span class="input-group-text">Jumlah</span>' +
    '<input type="number" name="persediaan_meja" class="form-control mb-0" placeholder="Masukkan Jumlah Pesanan Anda" value="0" min="0" max="100" onchange="pesanFurnitur()">' +
    '</div>';
    document.getElementById('persediaan_kursi').innerHTML =
    '<div class="input-group mb-3">' +
    '<span class="input-group-text">Jumlah</span>' +
    '<input type="number" name="persediaan_kursi" class="form-control mb-0" placeholder="Masukkan Jumlah Pesanan Anda" value="0" min="0" max="400" onchange="pesanFurnitur()">' +
    '</div>';
    document.getElementById('persediaan_lemari').innerHTML =
    '<div class="input-group mb-3">' +
    '<span class="input-group-text">Jumlah</span>' +
    '<input type="number" name="persediaan_lemari" class="form-control mb-0" placeholder="Masukkan Jumlah Pesanan Anda" value="0" min="0" max="50" onchange="pesanFurnitur()">' +
    '</div>';
    document.getElementById('persediaan_lampu').innerHTML =
    '<div class="input-group mb-3">' +
    '<span class="input-group-text">Jumlah</span>' +
    '<input type="number" name="persediaan_lampu" class="form-control mb-0" placeholder="Masukkan Jumlah Pesanan Anda" value="0" min="0" max="50" onchange="pesanFurnitur()">' +
    '</div>';
    document.getElementById('persediaan_kipas').innerHTML =
    '<div class="input-group mb-3">' +
    '<span class="input-group-text">Jumlah</span>' +
    '<input type="number" name="persediaan_kipas" class="form-control mb-0" placeholder="Masukkan Jumlah Pesanan Anda" value="0" min="0" max="50" onchange="pesanFurnitur()">' +
    '</div>';
    document.getElementById('persediaan_wire').innerHTML =
    '<div class="input-group mb-3">' +
    '<span class="input-group-text">Jumlah</span>' +
    '<input type="number" name="persediaan_wire" class="form-control mb-0" placeholder="Masukkan Jumlah Pesanan Anda" value="0" min="0" max="50" onchange="pesanFurnitur()">' +
    '</div>';
}
