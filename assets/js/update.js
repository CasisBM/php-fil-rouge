function update(id) {
    let col = document.querySelector("input[value='"+id+"']");
    console.dir(col.closest("tr")); 
/*     var item = $(this).closest("tr").childNodes; 
    item.forEach(element => {
        console.log(element);
        console.dir(element);
    }) */
};