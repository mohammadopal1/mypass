CIS 476 Term Project
Document/Program Due Dates: Monday 12/2/24
Demo Time: 12/2/24 3pm
This project is required for all students. You may finish the project all by yourself or team with others. 3 team members maximum.

In this project, you are required to design a password management software “MyPass”. MyPass can be a mobile app or web-based software with the following functions/features. Bitwarden is a sample product.
Functions/Features
•	Allow user to register an account (email address as username and a master password and three security questions)
•	Suggest strong password (password generator)
•	Weak master password warning
•	Once logs in, the user will have access to all sensitive data saved in the vault.
•	MyPass has built-in data type in the vault, including Login, Credit Card, Identity, Secure Notes.
•	MyPass allows user to create/modify/delete items in the vault.
•	MyPass allows user to easily copy username/password and URL in Login data type
•	MyPass allows user to easily copy credit card number and CVV in credit card data type
•	Sensitive data such as username, password, credit card number, CVV, passport number, license number, social security number must be masked
•	All masked data must be given an option to unmask.
•	Auto lock after x mins of inactivity
•	Auto delete copied sensitive data in clipboard after x mins 


Implementation
•	User Authentication and Encryption:
o	Implement the Singleton pattern to manage the user's session securely.
•	Password Storage and Management:
o	Apply the Observer pattern to notify users in the events of weak password, credit card expiration, passport expiration, license expiration, etc.
•	User Interface and Interaction:
o	Implement the Mediator pattern to manage communication between various UI components.
•	Password Generation:
o	Apply the Builder pattern to create complex passwords with specific requirements (length, complexity).
•	Data Mask and Unmask:
o	Implement the Proxy pattern to mask and unmask sensitive data.
•	Master Password Recovery:
o	Apply the Chain of Responsibility pattern to create a secure process (using three security questions to build the chain) for recovering a forgotten master password.

•	Notes: 
o	Provide detailed design of patterns used in the solution via class diagram with mapping of pattern classes to the actual application classes.
o	The developed code must be thoroughly commented and synchronized with the model.
•	Submission
o	Submit One .zip file that contains the followings
	Source code
	A report that includes class diagrams and their descriptions, database schema and descriptions, user-interface screen shots and descriptions, references.
