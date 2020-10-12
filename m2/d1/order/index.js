var orders = []
var total = 0

function reset() {
    total = 0
    document.getElementById("total_price").innerHTML = total
}

function add(name, price) {
    orders[0] = [name, price]
    bill(price)
}

function bill(price){
    total += price
    alert("Menambahkan Rp." + price + " ; Harga total sekarang Rp." + total)
    document.getElementById("total_price").innerHTML = total
}