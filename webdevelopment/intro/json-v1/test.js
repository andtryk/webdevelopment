var jPerson = {
  "name":"Santiago",
  "lastName":"Donoso"
}
// console.log( jPerson.name+" "+jPerson.lastName )
console.log( jPerson.name, jPerson.lastName )

jPerson.phone = "12345678"
console.log("phone", jPerson.phone)
jPerson.name = "x"
console.log("name", jPerson.name)

console.log(jPerson)
delete jPerson.phone
console.log(jPerson)

