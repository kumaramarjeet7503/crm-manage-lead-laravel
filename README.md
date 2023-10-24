# Lead Management

This website is a digital platform that efficiently captures, tracks, and nurtures potential customer inquiries or "leads." It automates lead collection, prioritizes prospects, and streamlines communication, enhancing sales team efficiency. Integrated with CRM systems, it aids in targeted marketing, analytics, and ensures that no valuable lead is overlooked, ultimately driving sales growth.

 * Watch [Product Tutorial here](https://drive.google.com/file/d/1lNxhEcjhrQTGs-ZyJHbSOxxK--4p_t9u/view?usp=sharing)

![add-lead](https://github.com/kumaramarjeet7503/crm-manage-lead-laravel/assets/64517073/397d4c6e-5f29-4f11-a29f-76c60758a640)

## Requirement
* PHP - 7.4
* Laravel - 8
* Composer

## Installation

1. composer global require laravel/installer  [composer create-project --prefer-dist laravel/laravel:^8.0 {Project Name}]
2. Clone this repository.
3. Create a virtual host for your application and map it into config.php
4. provide required access to public directory
5. Run migrations and php init to start application [php artisan migrate]
6. run composer update and dump to install other dependencies


## Usage
1. Register yourself in the application with signup form.
2. Goto add lead for creating a lead 
3. As the lead created it redirects to manage leads section where user can update , review its lead.
4. Goto convert section to transfer lead into a deal.
5. Fill the required information for deal conversion.
6. As the lead converted successfully it redirects to manage deal section and the lead will be removed.
7. At the time of lead conversion new account and contact will be created at the same time.
8. There is also functionality to manage account as well as contact.

## Features
* Follow MVC architecture.
* Signup/Login functionality.
* Lead Creation and conversion .
* Account and Contact Creation while new deal.
* Individual account as well as contact addition .
* Manage functionality for lead, account , contact and deals.

## Screenshots

### Login
![login](https://github.com/kumaramarjeet7503/crm-manage-lead-laravel/assets/64517073/61fb192b-3010-4506-8930-964639e1f1d9)

### Dashboard
![dashboard](https://github.com/kumaramarjeet7503/crm-manage-lead-laravel/assets/64517073/ddadeb31-08d8-4784-87ce-c58fed51d8b5)


### Add lead
![add-lead](https://github.com/kumaramarjeet7503/crm-manage-lead-laravel/assets/64517073/89385f07-4696-45da-a703-0a09cbce5abc)

### Manage lead

![manage-lead](https://github.com/kumaramarjeet7503/crm-manage-lead-laravel/assets/64517073/bb463df3-8da9-4fa2-bf68-5e8274e0d53d)

### Lead conversion into deal
![deal-conversion](https://github.com/kumaramarjeet7503/crm-manage-lead-laravel/assets/64517073/1be3f38c-e38b-4585-a4c3-138401df6901)

### Manage Deal

![manage-deal](https://github.com/kumaramarjeet7503/crm-manage-lead-laravel/assets/64517073/8d6c457c-2ff1-47d8-ba8a-dcd6fadd7b0e)


