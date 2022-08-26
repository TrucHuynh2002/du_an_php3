let so_luong = document.querySelectorAll(".sl");
so_luong.forEach(function (item, index) {
    let priceThanhTien = document.querySelectorAll('.gia_tien');
    item.onchange = function () {
        let price_oo = document.querySelectorAll('.gia_sp');
        priceThanhTien[index].innerHTML = (Number(item.value) * Number(price_oo[index].innerHTML))
        tongtienCart()
    }
});
function tongtienCart(){
    let priceThanhTien = document.querySelectorAll('.gia_tien');
    let tongtien = document.querySelector('#tongtien');
    let tongtien_input = document.querySelector('#tongtien_input');

    let tong = 0;
    priceThanhTien.forEach(function (item){
        tong+= Number(item.innerHTML);
    })
    tongtien.innerHTML=tong.toLocaleString();
    tongtien_input.innerHTML=tong.toLocaleString();
}
tongtienCart();