function search_table(valor){
    $('#livros tr').each(function(){
        var found = 'false';
        $(this).each(function(){
            if($(this).text().toLowerCase().indexOf(valor.toLowerCase()) >= 0){
                found = 'true'
            }
        })
        if(found == 'true'){
            $(this).show()
        }else{
            $(this).hide()
        }
    })
}

$(document).ready(function(){
    $('#inputData').keyup(function(){
        search_table($(this).val())

    })

})