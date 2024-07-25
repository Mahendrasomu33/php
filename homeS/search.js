function performSearch() {
    const searchTerm = document.getElementById('search-input').value.toLowerCase();
    const recipesResults = document.getElementById('recipes-results');
    const restaurantsResults = document.getElementById('restaurants-results');
    const articlesResults = document.getElementById('articles-results');

    // Clear previous results
    recipesResults.innerHTML = '';
    restaurantsResults.innerHTML = '';
    articlesResults.innerHTML = '';

    // Sample data
    const recipes = [
        'Spaghetti Carbonara',
        'Chicken Tikka Masala',
        'Vegetarian Chili',
    ];

    const restaurants = [
        'Mario\'s Italian Bistro',
        'The Curry House',
        'Green Garden Café',
    ];

    const articles = [
        '10 Best Italian Recipes',
        'The Ultimate Guide to Indian Spices',
        'Healthy Vegetarian Meal Ideas',
    ];

    // Filter and display results
    const filteredRecipes = recipes.filter(recipe => recipe.toLowerCase().includes(searchTerm));
    const filteredRestaurants = restaurants.filter(restaurant => restaurant.toLowerCase().includes(searchTerm));
    const filteredArticles = articles.filter(article => article.toLowerCase().includes(searchTerm));

    if (filteredRecipes.length) {
        const recipesHeader = document.createElement('h3');
        recipesHeader.textContent = 'Recipes';
        recipesResults.appendChild(recipesHeader);
        filteredRecipes.forEach(recipe => {
            const item = document.createElement('p');
            item.textContent = recipe;
            recipesResults.appendChild(item);
        });
    }

    if (filteredRestaurants.length) {
        const restaurantsHeader = document.createElement('h3');
        restaurantsHeader.textContent = 'Restaurants';
        restaurantsResults.appendChild(restaurantsHeader);
        filteredRestaurants.forEach(restaurant => {
            const item = document.createElement('p');
            item.textContent = restaurant;
            restaurantsResults.appendChild(item);
        });
    }

    if (filteredArticles.length) {
        const articlesHeader = document.createElement('h3');
        articlesHeader.textContent = 'Articles';
        articlesResults.appendChild(articlesHeader);
        filteredArticles.forEach(article => {
            const item = document.createElement('p');
            item.textContent = article;
            articlesResults.appendChild(item);
        });
    }
}
