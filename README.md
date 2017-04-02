# asgardshop

Shop module based on Laravel and Asgardcms.  
  
WIP: Shop module is in research status.   
  
If you are interested on same topics send me an email: bojan@kovacec.net  

# Product Module

Laravel migrations. CRUD integration for Asgardcms. 

## Product Properties (EAV)

Each Product can have different properties. 

Property: 

* name (localized)
* key (unique-id)
* type
  * BOOL (Yes / No)
  * STRING (String value)
  * LSTRING (Localized String)
  * SELECT (Predefined String Values)
  * LSELECT (Localized Predefined String Values)


TODO: methods 
withPropertyValue?

# Customer Module

Customer:

* email (unique)
* firstname
* lastname
* address management
* contact informaton management

# Supplier Module

* customer
* supplier_id (relation with Product)

# Chat Module

Asgardcms / Adminlte integration. Push notifications. Phone App.

# Cart Module

NOTE:   
https://laravel.com/docs/5.4/billing  
If you're only performing "one-off" charges and do not offer subscriptions, you should not use Cashier. Instead, use the Stripe and Braintree SDKs directly.  
 