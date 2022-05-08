// console.log($("input[class~='class1']"))

//$("div").attr("style", "width: 150px; height: 150px; background: red")

// $("input").prop("disabled", true)
// console.log($("input").prop("disabled", true))

// $("input").each((index, item) => {
//     $(item).val(index)
//     console.log($(item).val())
// })

$("#btn1").on("click", (event) => {
    $("div").animate({
        "left": "500px"
    }, 1500, "linear", () => {
        alert("Я закончил двигать ящик!")
    })
})

 $("#btn2").on("click", (event) => {
 $("p").slideDown("slow")
})

// $("#btn2").on("click", () => {
//     $("#btn1").trigger("click.event1")
// })

