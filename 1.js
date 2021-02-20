function prima(angka1, angka2) {
    if (angka1 > angka2) {
        [angka1,angka2] = [angka2, angka1]
        hasil(angka1, angka2);
    }else{
        hasil(angka1, angka2)
    }

    function hasil(numb1, numb2) {
        let angka = [];

        for (let batasBawah = numb1; batasBawah <= numb2; batasBawah++) {
            angka.push(batasBawah);
        }

        let bilPrima = [];

        angka.forEach(numb => {if(cek(numb) != 1) bilPrima.push(numb)});
        
        console.log(bilPrima);

        function cek(number) {
            let flag = 0;
            for (let x = 2; x < number; x++) {
                if (number % x == 0) {
                    return flag = 1;
                }
            }
        }

    }

}