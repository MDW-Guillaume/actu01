let articles = document.querySelectorAll('.paginateArticle')
let paginateSection = document.getElementById('paginateSection')
let i = 0;
let j = 1;
console.log(articles)

for(i; i < articles.length; i++){
    if(i%12 == 0){
        j++
    }
    
}