# WEBT | CORE | Views in MVC

## Overview
Your company was booked to create an infosite about the most famous hotels of the strip. As most of the work will be related to frontend optimization, you are tasked with creating a basic responsive prototype. Afterwards a dedicated Frontend Developer will pick up from there. You are to ensure, that she receives the best work environment possible and does not have to bother herself with editing PHP code.

## User Story 1
*As a Developer I want to create a responsive prototype HTML page, containing some demonstration content about the hotels on the strip.*

### Acceptance Criteria
- A plain HTML prototype exists
- There is a short information block about at least 3 different hotels 

## User Story 2
*As a Developer I want to create a basic templating engine based on the PHP functions “fread” and “str_replace”, using HEREDOC for longer text in variables, in order to decouple the HTML view from the code.*

### Acceptance Criteria
- The plain HTML prototype (see User Story 1) has placeholders which are replaced programmatically
- The plain HTML prototype can be edited/enhanced with the help of placeholders without the need of changing the PHP Code.

## User Story 3
*As a Developer I want to create a functionality in my custom templating engine that supports loops, so that hotels which are added in the code are automatically rendered without having to alter the template*

### Acceptance Criteria
- The plain HTML prototype can display an arbitrary number of hotels based on the number of hotels created in the code

#### Links
https://my.skilldisplay.eu/en/skillset/85

## How to Run
### Tailwind
To run Tailwind use: `npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch`