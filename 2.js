function vendingMachine(cola, pepsi, fanta, jumlahUang) {
    console.log(konvRupiah(jumlahUang));
    
    const totalCola = 4000 * cola;
    const totalPepsi = 4500 * pepsi;
    const totalFanta = 3500 * fanta;
    const totalHarga = totalCola + totalPepsi + totalFanta;
    const totalBarang = cola + pepsi + fanta;

    
    if (jumlahUang < totalHarga) {
        console.log("uang tidak cukup!");
    } else {
        console.log(`Coca-cola = ${konvRupiah(4000)} * ${cola} \nPepsi = ${konvRupiah(4500)} * ${pepsi} \nFanta = ${konvRupiah(3500)} * ${fanta} \nJumlah Barang = ${totalBarang} \nTotal Harga = ${konvRupiah(totalHarga)} \nJumlah Uang = ${konvRupiah(jumlahUang)} \nKembalian : \n\n`);

        const totalKembalian = jumlahUang - totalHarga;
        const detailKembalian = kembalian(totalKembalian);
        detailKembalian.forEach(uang => {
            let lembarOrKoin = "";

            if (uang == 500) {
                lembarOrKoin = lembarOrKoin.concat('koin');
            } else {
                lembarOrKoin = lembarOrKoin.concat('lembar');
            }

            console.log(`1 ${lembarOrKoin} uang ${konvRupiah(uang)} (${konvTerbilang(uang)} rupiah)`);
        });

        console.log(`Total kembalian ${konvRupiah(totalKembalian)} (${konvTerbilang(totalKembalian)} rupiah)`);
    }

    function kembalian(total) {
        const uangIndo = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];

        let sisa = total;
        let jumlahUangTotal = [];
        
        for (const index in uangIndo) {
            if (sisa != 0 && uangIndo[index] <= sisa) {
                sisa -= uangIndo[index];
                jumlahUangTotal.push(uangIndo[index]);
            }
        }

        return jumlahUangTotal;
    }

    function konvRupiah(uang) {
        let rupiah = "";
        const uangRev = uang.toString().split('').reverse().join('');
        for (let i = 0; i < uangRev.length; i++) if(i%3 == 0) rupiah += uangRev.substr(i, 3) + ".";
        return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('');
    }

    function konvTerbilang(uang) {
        
        let angkaTerbilang = new Array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        let terbilang;

        //fungsi rekursif

        //satuan
        if (uang < 12) {
            terbilang = " " + angkaTerbilang[uang];
        } else if (uang < 20) {
            //belasan
            terbilang = konvTerbilang(uang - 10) + " belas";
        } else if(uang < 100){
            //puluhan
            terbilang = konvTerbilang(Math.floor(uang/10)) + " puluh" + konvTerbilang(uang%10);
        } else if (uang < 200) {
            //angka seratusan
            terbilang = ' seratus' + konvTerbilang(uang-100); 
        } else if (uang < 1000) {
            //angka ratusan
            terbilang = konvTerbilang(Math.floor(uang/100)) + " ratus" + konvTerbilang(uang%100);
        } else if (uang < 2000) {
            // angka seribuan 
            terbilang = " seribu" + konvTerbilang(uang-1000);
        }else if (uang < 1000000) {
            //karena sudah terdapat konversi ke puluh dan ratus, maka tingkatan langsung loncat ke sejuta
            terbilang = konvTerbilang(Math.floor(uang/1000)) + " ribu" + konvTerbilang(uang % 1000);
        }else{
            console.log("error");
        }

        return terbilang;
    }
}