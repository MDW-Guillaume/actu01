# Actu-01

## Formats
### Tablette (768px)



## Fonctions 

``` Article::findOrFail($id) ```

Permet de chercher une ligne unique dans la table Article grâce à l'id




##### Update base de donnée en POST avec Ajax

```
$('input.checkbox').on('change', function(e) {
    $.ajax({
      type: "POST",
      url: url,
      data: {value: $(this).val(), id: $(this).data('id'), name: $(this).data('name')},
      success: function() {
        console.log('submitted')
      }
    });
});
```

