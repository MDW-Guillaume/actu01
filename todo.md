# Actu-01

## Liste des pages

- [x] Index
- [x] Météo
- [x] Article Unique
- [x] Catégorie
  - [x] Catégorie/{article}
- [x] Contact
- [x] Mon compte
  - [x] Connexion / Inscription
  - [x] Mon compte 
  - [x] Mes actus

## Routes

- [x] /
- [x] /article/{id}
- [x] /categorie
- [x] /categorie/{slug}
- [x] /user
- [x] /user/{id}
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

