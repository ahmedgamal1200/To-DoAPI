# To-Do List API - A simple To-Do List API built using Laravel to manage tasks with CRUD functionality. 

## API Endpoints 

1. **Create To-Do** `POST /api/todos` - 
Request Body: `{ "title": "Buy groceries", "description": "Milk, Eggs, Bread", "is_completed": false }`. 
Response: `{ "success": true, "message": "To-Do created successfully", "data": { "id": 1, "title": "Buy groceries", "description": "Milk, Eggs, Bread", "is_completed": false, "created_at": "2024-12-24T15:00:00Z", "updated_at": "2024-12-24T15:00:00Z" } }`.

2. **Get All To-Dos** `GET /api/todos` - 

3. **Get Specific To-Do** `GET /api/todos/{id}` -

4. **Update To-Do** `PUT /api/todos/{id}` - 
 
5. **Delete To-Do** `DELETE /api/todos/{id}` -

## Setup Instructions 
   
1. Clone the repo: `git clone https://github.com/your-username/todo-api.git`
2. Install dependencies: `composer install` 
3. Set up the `.env` file: `cp .env.example .env` 
4. Generate app key: `php artisan key:generate` 
5. Run migrations: `php artisan migrate` 
6. Start the server: `php artisan serve` (API available at `http://127.0.0.1:8000`). 

## Testing the API: Use Postman to test the API.

## Import the provided Postman collection to test all routes. 