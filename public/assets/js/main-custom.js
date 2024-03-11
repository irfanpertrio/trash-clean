var jumlah = document.getElementById('jumlah-reward')
var koin = document.getElementById('jumlah-trashcoin')

$(document).ready(function () {
    jumlah_nol();
});

function jumlah_nol() {
    console.log(jumlah_max);
    if (jumlah_max == 0) {
        jumlah.value = 0;
    }
    console.log(jumlah.value);

}

jumlah.addEventListener('change',
    function () {
        if (jumlah.value > jumlah_max) {
            jumlah.value = jumlah_max
        }
        jumlah.value = parseInt(jumlah.value)
        koin.value = jumlah.value * koin_diperlukan
    }
)