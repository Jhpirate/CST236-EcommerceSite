# CST-236 Project Guide

**Directions:** Throughout this course, students will create a secure Database Web Application using PHP and MySQL. **Note:** For details on building each milestone, refer to the &quot;CST-236 PHP 2 Grand Canyon University Course Introduction,&quot; located within the Course Materials for a video playlist.

**Playlist Link:** https://www.youtube.com/playlist?list=PLhPyEFL5u-i2n4P6PVquXHPbuRDssZFAt

[//]: <> (Minimally helpful. Videos are old, reference materials that do not exist for this class, and are largely out of order.)

# Contents

[Project Description](#Project-Description)

[Milestone 1: Login and Registration Form](#milestone-1-login-and-registration-form)

[Milestone 2: Product Catalog and Product Search](#milestone-2-product-catalog-and-product-search)

[Milestone 3: User and Product Administration](#milestone-3-user-and-product-administration)

[Milestone 4: Shopping Cart](#milestone-4-shopping-cart)

[Milestone 5: Checkout Process](#milestone-5-checkout-process)

[Milestone 6: Sales Report](#milestone-6-sales-report)

[Milestone 7: Customization](#milestone-7-customization)

[Ecommerce Site Project Suggested Schema](#ecommerce-site-project-suggested-schema)

[Site Pages](#site-pages)

[Wireframe Examples for PHP 2 Store Website Project](#wireframe-examples-for-php-2-store-website-project)

# Project Description

In this project, students will create an ecommerce site implementing the components and functionality described in the table below. Each programming project will have two purposes:

1. Expand and reinforce previously covered concepts and
2. Challenge students to use and incorporate new concepts and techniques into their PHP, MySQL, and Python programming skill set.

This is initially conceived as a single store for a small business that wants to have an online presence for their products. The optional elements for this would include features like multi-store, ratings and feedback, statistical reports about store and product turnover/returns, running online advertising and possibly profit/loss on an item/store basis.

| **Component** | **Functions** | **Relevant table** |
| --- | --- | --- |
| **Self-Registration** | Process user information <br> Verify that user does not exist <br> Store information in users table | Users |
| **Login** | Process user information <br>Authenticate user <br>Password retrieval | Users |
| **User Administration** | Create user <br>Manage users roles and permissions <br>Delete users <br>Email users (individual and group, e.g. promotions) | Roles |
| **Catalog Administration** | Manage products and categories <br>Add product <br>Update product <br>Remove product | Catalog |
| **Product administration** | Add, edit, delete products (specific items to purchase). Includes marking as active/inactive and linking to a specific catalog | Products |
| **Shopping Cart** | Add product <br>Remove product <br>Update quantity <br>Process Shipping information <br>Process payment information ( **simulate** ) <br>Filter language <br>Secure transaction | Shopping\_Cart |
| **Catalog Display** | Lists Products <br>Filter products (keyword, category, type, price) <br>Sort list <br>View product <br>Pagination <br>Show ad | Dynamic via selects and views |
| **Search** | Search products (keyword, category, type, price) | Catalogs <br>Products |
| **View product** | Read product description, availability, etc <br>Add to cart | Cataglogs <br>Products <br>Users <br>Shopping\_cart |
| **Basic Analytics Reports** | List top products <br>List top categories <br>List shopping statistics (mean purchase, median purchase, total purchase) | Products <br>Shopping\_cart <br>Users |
| **Extension** | Create additional functionality beyond the previous items mentioned. <br>Read reviews (optional) <br>Add review (optional only if they purchased one) <br>Rate product (optional only if they purchased one) <br>Share product (optional only if they purchased one) | Ratings (optional) <br>Reviews (optional) |

# Milestone 1: Login and Registration Form

**Overview**

In this milestone, students are introduced to the course-long project they will be building. Students will create a Login and Registration Module.

**Execution**

Execute this assignment according to the following guidelines:

1. For details on building this milestone, refer to the &quot;CST-236 PHP 2 Grand Canyon University Course Introduction,&quot; located within the Course Materials, for a video playlist.
2. Create a Login Module making sure to:
    1. Build a users table.
    2. Create a login form.
    3. Set a SESSION variable that tracks the status of the login.
3. Create a Registration Module making sure to:
    1. Create a new user account with a form.

**Submission**

Submit the following to the learning management system:

1. A Word document containing the following design documents: Wireframe drawings, ER diagrams, and any UML class diagrams
2. A ZIP file of all source code
3. A screencast video demonstrating new features and describing the code running behind the scenes

# Milestone 2: Product Catalog and Product Search

**Overview**

In this milestone, students will create a Product Catalog Display and a Product Search Module.

**Execution**

Execute this assignment according to the following guidelines:

1. For details on building this milestone, refer to the &quot;CST-236 PHP 2 Grand Canyon University Course Introduction,&quot; located within the Course Materials, for a video playlist.
2. Create a Product Catalog Display making sure to:
    1. Show all products.
    2. Tabulate by 10 items per each page.
    3. Show in a table or grid format.
    4. Provide a view button or link on each product to show larger pictures and full details of the product.
3. Create a Product Search Module making sure to provide the ability to:
    1. Search for products at a minimum by name. The search results should be displayed easily to view and navigate the page.

**Submission**

Submit the following to the learning management system:

1. A Word document containing the following design documents: Wireframe drawings, ER diagrams and any UML class diagrams
2. A ZIP file of all source code
3. A screencast video demonstrating new features and describing the code running behind the scenes

# Milestone 3: User and Product Administration

**Overview**

In this milestone, students will create the user and product administration forms to create new users and new products, edit users and products, and to delete users and products.

**Execution**

Execute this assignment according to the following guidelines:

1. For details on building this milestone, refer to the &quot;CST-236 PHP 2 Grand Canyon University Course Introduction,&quot; located within the Course Materials, for a video playlist.
2. Create a management interface to Add, Edit and Delete products and Add, Edit and Delete user accounts.

**Build**

1. Modify the schema, the ER diagrams, the tables, the keys, and the relationships accordingly. You might need to add new fields to existing tables to support new functionality as well as split existing tables.
2. Update UML diagrams to reflect any new properties and methods in this milestone.
3. In PHP, update the Customer Class to include admin permissions. Modify the User Registration Page to accommodate the new roles and set a default role.
4. In MySQL, update the users table to include admin rights permissions for some accounts.
5. In HTML, build the forms and onSubmit handlers to display lists of customers, lists of products, edit a customer record, edit a product record, delete a customer account and delete a product entry.

**Submission**

Submit the following to the learning management system:

1. A Word document containing the following design documents: Wireframe drawings, ER diagrams and any UML class diagrams
2. Text file export of all necessary SQL tables
3. A ZIP file of all source code
4. A screencast video demonstrating new features and describing the code running behind the scenes
5. A link to the app hosted online

# Milestone 4: Shopping Cart

**Overview**

In this milestone, students will create the shopping experience with the ability to shop for products, place items in a shopping cart, and check out.

**Execution**

Execute this assignment according to the following guidelines:

1. For details on building this milestone, refer to the &quot;CST-236 PHP 2 Grand Canyon University Course Introduction,&quot; located within the Course Materials, for a video playlist.
2. Design the Shopping Cart making sure to:
    1. Create tables for Orders and Order Line Item Details as well as link to foreign keys.
    2. Create a table design. Use the following example as a suggested table design. The details on your app will likely be different.
    3. Give the customer the ability to place items in a shopping cart from a link or button on the search results or product details screen.
    4. Implement the simulation of a credit card payment processor during the first step of checkout.

**Submission**

Submit the following to the learning management system:

1. A Word document containing the following design documents: Wireframe drawings, ER diagrams and any UML class diagrams
2. A ZIP file of all source code
3. A screencast video demonstrating new features and describing the code running behind the scenes.

# Milestone 5: Checkout Process

**Overview**

In this milestone, students will create the final checkout step.

**Execution**

Execute this assignment according to the following guidelines:

Note: In Milestone 4, you should already have implemented the shopping experience with the ability to shop for products, place items in a shopping cart, update quantities and begin check out.

1. Design the Shopping Cart making sure to:
    1. Create the final checkout step where the app saves the purchase data to the orders history table. Ensure that the transaction is programmed as an ATOMIC process to prevent partial orders from being stored in the database.
    2. Show the user a final receipt for the order.


**Submission**

Submit the following to the learning management system:

1. A Word document containing the following design documents: Wireframe drawings, ER diagrams and any UML class diagrams
2. A ZIP file of all source code
3. A screencast video demonstrating new features and describing the code running behind the scenes

# Milestone 6: Sales Report

**Overview**

In this milestone, students will create a product sales report and REST service.

**Execution**

Execute this assignment according to the following guidelines:

1. Create a Product Sales Report making sure:
    1. The report options screen asks the user for a date range.
    2. The report shows the entire list of products purchased between the two dates.
    3. The report sorts the list by orders with the largest quantity ordered first.
1. Create a product REST Service making sure:
    1. It duplicates the functionality in the Sales Report.
    2. Generates JSON data.

**Submission**

Submit the following to the learning management system:

1. A Word document containing the following design documents: Wireframe drawings, ER diagrams and any UML class diagrams
2. A ZIP file of all source code
3. A screencast video demonstrating new features and describing the code running behind the scenes

# Milestone 7: Customization

**Overview**

In this milestone, students will design and create an additional feature that customizes their application.

**Choose one (or more) of the following enhancements.**

1. **Discount Coupon:** Create a coupon code or gift card that a customer may use at checkout. Customers may receive a set amount (such as $10 off) or a percent discount (10% off). Validate that a coupon code can be used only for one purchase. Create new table(s) in the database to manage coupons.
2. **Tax and Shipping:** Calculate tax and shipping costs. Estimate the shipping costs based on product&#39;s weight or size. Customers who are listed as &quot;Prime&quot; members do not have to pay shipping. Add new columns to the products table and customers table to be able to calculate these costs.
3. **Order Tracking:**
    1. Design pages to update order history (0 = order received, 1 = paid, 2 = packing, 3 = shipped, 4 = delivered, 5 = return request, 6 = return received, 7 = refund)
    2. Ensure the User may see progress of the order in a report.
    3. Ensure the User may request a return and refund in a new form. Add new columns to the orders table to support order tracking.
    4. Ensure that the Administration may create a report of all active orders, all completed orders, all returns and refunds.
4. **Customer Reviews:**
    1. Ensure customers may rate a product when an order has been completed.
    2. Ensure customers may comment on each product they have purchased.
    3. Generate reports showing the highest rated and most commented products.
    4. Ensure the search results include the &quot;sort by highest rated&quot; option.
5. **Photo Management:**
    1. Create an image upload option on the &quot;new product&quot; and &quot;edit product&quot; form. Research how to upload images using PHP code.
    2. Be sure to delete photo files when products are deleted.
    3. Ensure that image uploads are limited to a reasonable file size.
    4. Allow for multiple product images and show them in a small gallery. You may search for jQuery or Javascript gallery plugins to use carousel controls of your photos.
6. **Laravel** : Follow the tutorials to install, configure and build a simple PHP application using the most popular PHP framework currently in use. This is not an extension of the semester project, but rather an extension of your knowledge. Follow the provided tutorials to demonstrate successful implementation of an app in Laravel.

**Execution**

Execute this assignment according to the following guidelines:

1. Choose one of the improvements mentioned above.
2. Create necessary wireframes, UML, and ER diagrams.
3. Modify the database tables to support the new feature.
4. Write the PHP code for the new forms, handlers, and business services necessary to support the feature.

**Submission**

Submit the following to the learning management system:

1. A Word document containing the following design documents: Wireframe drawings, ER diagrams and any UML class diagrams
2. A ZIP file of all source code
3. A screencast video demonstrating new features and describing the code running behind the scenes

# Ecommerce Site Project Suggested Schema

**Tables**

**Users**

| Field | Type |
|-|-|
| User_id | PK, auto generated by mysql or app |
| User_name | unique, not null, required |
| User_role | required, not null, FK to role.role_id |
| User_nickname | unique, not null, if not provided use first/last name |
| First_name | required, not null |
| Middle_Name | optional |
| Last_name | required, not null |
| Email1 | required, unique, not null |
| Email2 |  |
| Address1 |  |
| Address2 |  |
| City |  |
| State |  |
| Zipcode |  |
| Country |  |
| User_banned | y/n``````, default to 'n' |
| User_bannned_reason | required, |
| User_deleted | y/n, default to 'n' |
| Password encrypted | required, not null |
| Password_LastChangeDate required, not null |  |

**Roles**

- Role\_id unique, PK, auto generated by mysql or app
- Role\_name unique, not null
- Role\_description required, not null
- Created\_date auto
- Created\_by FK to user.user\_id
- Updated\_date auto
- Updated\_by FK to user.user\_id
- Active\_flag y/n, default to &#39;y&#39;

**Catalog** (simple table with a list of possible types of products, description, URL for image. etc.)

- catalog\_id PK, unique, not null, required
- catalog\_title required
- catalog\_desc required
- catalog\_active y/n, required
- catalog\_keywords short list of words that can be used by the search function
- catalog\_notes additional notes that is used just by store (not customers) to retain various

notes about the catalog.

**Products** (list of unique products with specific details for each one, includes how many of each unique item. The count is updated as items are sold/shipped or returned.)

- product\_id Pk, unique, required
- catalog\_id FK to catalog table
- product\_name required
- prodiuct\_price\_current required
- prodiuct\_price\_Initial required
- product\_size optional -
- product\_desc required - brief description of the product
- product\_keywords short list of words that can be used by the search function
- product\_count numeric, 0 or greater, current number of this specific item based on
- sold vs initial quantity
- product\_active y/n, required, is this an active product (for sale or not)
- product\_live\_date date/time when this first went live
- product\_notes additional notes that is used just by store (not customers) to retain

various notes about the product.

**Shopping Cart** (running list of the shopping cart for each user; displayed items vary based on active items in the cart.)

- cart\_id PK, unique, not null required
- user\_id FK to users, not null, required
- ShipToMe y/n flag that indicates that you use the user\_id address from the user table.
- ShipTo\_name required if ShipToMe is &#39;n&#39;
- ShipTo\_address1 required if ShipToMe is &#39;n&#39;
- ShipTo\_address2 optional
- ShipTo\_city required if ShipToMe is &#39;n&#39;
- ShipTo\_state required if ShipToMe is &#39;n&#39;
- ShipTo\_zip required if ShipToMe is &#39;n&#39;
- ShipTo\_country required if ShipToMe is &#39;n&#39;
- ShippingCost required but can be $0.00. Cost of shipping all items in the cart to the

shipping address

- cart\_total\_sales amount in $ of the final sales for all items, not including shipping

**Shopping Cart Items**

- cart\_id FK to Shopping\_cart, required
- user\_id FK to users, not null, required
- product\_id FK to products table
- quantity number of the specific product that user wants to purchase
- product\_price fetch from products.product\_price\_current when added to cart
- DateAdded required, date/time when items was added to the shopping cart
- Is\_Active y/n - is this an active item. As items are sold/shipped they get marked as

&#39;inactive&#39;

# Site Pages

Below is a list of suggested pages that you will need to create on your ecommerce site. Feel free to edit, add, or delete this starting document as necessary.

| **#** | **Page Title** | **Description** | **Constraints** |
| --- | --- | --- | --- |
| 1 | Login Page + Registration Page |
- Username and password fields. Submit button.
- On the same page, but in different form:
- Desired username, password, verify password.
  | Open to all users.Check for duplicate user name in the registration handler before creating the new account. |
  | 2 | Product Catalog |
- This is the main page for most activity. Show a list or grid of all products, short description, price, add to cart button, details button.
- Search box at the top of the page allows keyword searches.
- Sort by buttons perform searches for A-Z, Price low to high, newest to oldest.
- Options for future versions: Category dropdown menu allows user to show departments.
- Sort by customer reviews.
  | Open to all users.
  Restrict items per page to default of 20 items per page. Menu options for 20, 50, 100, all items. |
  | 3 | Product Details |
- Show one product on the entire page. Larger photo. Longer detailed description. Add to cart button.
- Show edit button to admin users.
- Optional features for future versions: Customer reviews, carousel of multiple photos, customer photos, product options such as size, color, deluxe kit etc.
  | Open to all users |
  | 4 | Product List Admin |
- Similar to catalog but with additional Edit and Delete buttons on each row.
  | Restricted access to only admin accounts. |
  | 5 | Create New Product |
- Entry form to create a new product. Should address all details of your products – title, description, price, UPC number, manufacturer
- Optional features for future versions: product category (e.g. sports, books, shoes, music, electronics etc), variants (colors, sizes, accessory kits etc)
  | Restricted access to only admin accounts. |
  | 6 | Edit a Product
  |
- All of the same data from the product entry form. Should address all details of your products – title, description, price, UPC number, manufacturer
- Optional features for future versions: product category (e.g. sports, books, shoes, music, electronics etc), variants (colors, sizes, accessory kits etc)
  | Restricted access to only admin accounts. |
  | 7 | Cart Details |
- Shows a list of products that the user has selected, short description, photo, price, quantity. Able to edit quantities. Remove button for each product. Update qty button next to the qty field. Below, show the $ values for subtotal, tax and shipping costs. Checkout button advances to the payment and shipping screen.
  | Open to all accounts |
  | 8 | Checkout |
- Shows the list of product, subtotal cost, tax and shipping.
- If the user has not logged in, show the registration form.
- Pay button.
  | Open to all accounts |
  | 9 | User List Admin |
- Shows a grid of all usernames. Edit and delete buttons. Account activity button lead to &#39;User activity&#39; report screen. Edit button leads to &quot;my account profile&quot; for that user.
  | Admin users only. |
  | 10 | My Account Activity |
- Shows history (list or grid) of orders for a single user.
- Order number, date, amount. Details button on each line leads to the order details page.
- No delete or edit buttons.
  | Access only for admins &amp; user&#39;s own account activity. |
  | 11 | My Account Profile |
- Shows the user&#39;s account details – name, address, billing information – in a form. Editable.
  | Admin user access plus users may see and edit their own profile. |
  | 12 | All Orders Report |
- Show list (or grid) of every order done in the store. Columns in grid are date, customer name, amount and completion status. Details button on each line that leads to a page showing all elements purchased, cost for each.
  | Admin user account access only.Perhaps create a customer service employee account to access this page. |

# Wireframe Examples for PHP 2 Store Website Project

For each page mentioned in Part 1, draw a wireframe for the user interface (UI) that you will implement. A wireframe should be about the form, spacing, arrangement of elements, buttons, headers and other spaces on your page. You do not need to provide any artwork or specific content (blogs, product descriptions, customer reviews, etc). Instead, use placeholder photos or Lorem Ipsum text.

These example designs were taken from various websites using Google image search terms such as &quot;product details wireframe&quot;, &quot;store catalog wireframe&quot;, &quot;employee list form&quot;, &quot;checkout form&quot;, &quot;ecommerce site ui design&quot; etc.

Use the images as a guide but think about what features of your app you wish to include or exclude for later development.

**Main Welcome Page Example**

![](RackMultipart20210122-4-1wm12ul_html_ef18c5c7921ab872.png)

**My Account Page Example** (login and register forms on the same page)

![](RackMultipart20210122-4-1wm12ul_html_ee590270b9d9131.png)

**Catalog Page Samples**

| ![](RackMultipart20210122-4-1wm12ul_html_dbc76821322a5a59.png) | ![](RackMultipart20210122-4-1wm12ul_html_8e8b24fbac292587.png) |
| --- | --- |
|

![](RackMultipart20210122-4-1wm12ul_html_1a0fad5673f1ec53.png) |
|

**Examples of Single Product Details Page**

| ![](RackMultipart20210122-4-1wm12ul_html_f774f25b6826b3da.png) | ![](RackMultipart20210122-4-1wm12ul_html_728749dbe23af09d.png) |
| --- | --- |
|

![](RackMultipart20210122-4-1wm12ul_html_b29566307de1ee68.png)
|

![](RackMultipart20210122-4-1wm12ul_html_47daa5d500c88933.png) |

**Your Shopping Cart Details Examples**

| ![](RackMultipart20210122-4-1wm12ul_html_7557705b851bc5b9.png) | ![](RackMultipart20210122-4-1wm12ul_html_57f6c32f7017cbef.png) |
| --- | --- |

![](RackMultipart20210122-4-1wm12ul_html_7135130449a16523.gif)

**Admin Page - Create a New Product / Edit Product Page Example**

![](RackMultipart20210122-4-1wm12ul_html_b56e57489329bf70.jpg)

**User Admin List**

![](RackMultipart20210122-4-1wm12ul_html_13f8f707dbf08a5.png)

![](RackMultipart20210122-4-1wm12ul_html_5faa4f03100ad0c.png)

![](RackMultipart20210122-4-1wm12ul_html_9f1a4a374b888854.png)

**Product Admin List Examples**

![](RackMultipart20210122-4-1wm12ul_html_e11ad371b5af0dd1.png)

![](RackMultipart20210122-4-1wm12ul_html_8e8da109d0783cdb.png)

**Order Success Page**

![](RackMultipart20210122-4-1wm12ul_html_3b5f2cfb8a18e09e.jpg)

**My Orders Report History**

![](RackMultipart20210122-4-1wm12ul_html_81a9b92acc928f2f.jpg)

**Report of All Orders in Time Period (for admin users)**

![](RackMultipart20210122-4-1wm12ul_html_f3ca0b9bfe3616d1.png)

![](RackMultipart20210122-4-1wm12ul_html_be7e19857e72b318.gif)

![](RackMultipart20210122-4-1wm12ul_html_38f2972429862f6.png)

© 2019. Grand Canyon University. All Rights Reserved.