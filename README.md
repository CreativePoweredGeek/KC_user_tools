# KC_user_tools
KC User Tools is a small collection of scripts for ExpressionEngine 3+ that allow you to easily retrieve user information from custom fields.

User Tools is written as a class with several methods. The construction is as simple as it gets (aside from a traditional “Hello World” example). By building it this way, it allows us to use it in our templates as a single Expression Engine Tag with 3 segments:

{exp:function:method}

The current available functions are: full_name, first_name, last_name.

In order to use them in your Templates just call the complete Tag:

{exp:cpg_user_tools:full_name}

{exp:cpg_user_tools:first_name}

{exp:cpg_user_tools:last_name}

These tools are likely not ready "as-is" for anyone to use,  but with a few edits you can easily use them.
