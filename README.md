# Cara Cepat Membuat Database

> Peringatan: Disarankan hanya untuk pemakaian local

## Download

```bash
npx degit mzaini30/db -f
```

## Membuat Table Baru

Misalnya dijalankan di `localhost`, maka buka aja `localhost`. Nanti setelah di-input, akan didapatkan id table-nya. Misalnya `hsh565ggh8t`.

## Contoh Pengolahan SQL

```javascript
const [idTable, sql] = ["57n746hdhah56", "http://localhost/sql.php"]
async function ambilData(){
 let body = new FormData
 body.append("sql", `select * from database_${idTable}`)
 let datanya = await fetch(sql, {
  method: "post",
  body
 }).then(x => x.json())
 datanya = await datanya
 console.log(datanya)
}
ambilData()
```