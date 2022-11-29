# Actu-01

## Liste des pages

- [x] Index
- [ ] Météo
- [x] Article Unique
- [x] Catégorie
  - [x] Catégorie/{article}
- [x] Contact
- [ ] Mon compte
  - [ ] Connexion / Inscription
  - [ ] Mon compte 
  - [ ] Mes actus

## Routes

- [x] /
- [x] /article/{id}
- [x] /categorie
- [x] /categorie/{slug}
- [ ] /user
- [ ] /user/{id}
- [x] /live
- [ ] /meteo
- [x] /contact
- [x] /newsletter
- [ ] search

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

