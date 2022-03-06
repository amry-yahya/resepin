let search_button = document.querySelector('.search-button');
let enter_click = document.querySelector('.title-input');
let result_container = document.querySelector('.recipes');

search_button.addEventListener('click', findRecipe);
enter_click.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') findRecipe();
});

async function findRecipe() {
    addLoading(result_container)
    try {
        let input_element = document.querySelector('.title-input');
        let keyword = input_element.value;
        keywordValidation(keyword);
        let search_result = await fecthRequestRecipe(keyword);
        updateUI_searchResult(search_result);
    } catch (error) {
        updateUI_error(error);
    }

}

async function fecthRequestRecipe(keyword) {
    const result = await fetch('https://api.spoonacular.com/recipes/search?apiKey=c43807f28a9746a590f430669a431277&number=1&query=' + keyword).then(response => response.json());
    if (result.Response === 'False') {
        throw new Error(result.Error);
    }
    return result.results;
}

function updateUI_searchResult(search_result) {
    let cards = "";
    for (const element of search_result) cards += getRecipes(element);
    result_container.innerHTML = cards;
}

function getRecipes(m) {
    return `    <div class="col-md-6 my-3">
                    <div class="card bg-dark border-secondary">
                        <p>${m.title}</p>
                        <img src="https://spoonacular.com/recipeImages/${m.image}" wid class="card-img-top">
                        <p>Time Serving : ${m.readyInMinutes} minutes</p>
                        <a href="${m.sourceUrl}" target="_blank">Recipe</a>
                    </div>
                </div>`;
}

function updateUI_error(error) {
    let error_element = `<h3>${error}</h3>`
    result_container.innerHTML = error_element;
}

function keywordValidation(keyword) {
    if (!keyword) {
        throw new Error('Please, input food name!');
        return;
    }
}

function addLoading(element) {
    element.innerHTML = `<div class="d-flex justify-content-center my-3">
                            <div class="spinner-border text-light" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>`
}