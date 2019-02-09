# API Example 

- A simple REST implementation using Micro-framework Lumen

# API Endpoints: 


GET: '/api/v1/customer'

GET: '/api/v1/customer/{id}' 

POST: '/api/v1/customer' 
    Required: 
    {
        type: 'MTN', 
        description: 'Cellphone'
        id_number: '8712121241123',
        first_name: 'John',
        last_name: 'Test'
        value: 'Number'
    }
    
PATCH: '/api/v1/customer/{id}' -
    Required: 
    {
        type: 'MTN', 
        description: 'Cellphone'
        id_number: '8712121241123',
        first_name: 'John',
        last_name: 'Test'
        value: 'Number'
    }
    
DELETE: '/api/v1/customer/{id}' -

### Installation

1.  Pull from Repository
2.  composer install
3.  setup env
4.  generate base64 code for env APP_KEY=base64 (use example)
5.  setup database
6.  run php migrate --seed to run migrations and seeder for dummy data
7.  else create new data using endpoint POST: '/api/v1/customer'

### Used to build

   Lumen - <https://lumen.laravel.com/>

