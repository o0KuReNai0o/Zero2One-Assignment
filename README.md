## Assignment

Create a simple Responsive web application to show the list of Restaurants by using Google Map API which users can enter a keyword to search, default the keyword to Bang sue.

## Condition
- Choose the PHP framework you’re expert in, if you can use Laravel will be a plus
- Choose the JS framework you’re expert in, if you can use VueJSlNuxtJS will be a plus
- Use PHP as an API endpoint to communicate with Google Map API
- Cache the search result to improve the performance on the server side
- Use JS framework to communicate with API
- Show the list of restaurant and its location
- User can enter a new search keyword
- Make it look nice enough by using Bootstrap and CSS
- Put some code comments by assuming there’ll be some other people continue your work
- Upload your code to any Git server

## To run
I use Redis in this project to cache the search result so I advice you to run back-end server using docker ``./vendor/bin/sail up``

I use Vite for front-end build tool
``npm install``
``npm run dev``

Don't forget to setup your .env to have GOOGLE_API_KEY (example in .env.example)
