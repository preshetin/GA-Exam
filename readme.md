## Google Analytics Exam backed by Laravel 5 Framework

Just learning how to build Laravel 5 application.

## Overview

A simple quiz application made on Laravel 5.

## Features

### 1. Check answer result after reply
![Check answer result after reply](https://www.dropbox.com/s/ujrtzwliihx7192/slider_image_1.png?raw=1)

### 2. Answer questions by topics
![Answer questions by topics](https://www.dropbox.com/s/ux6qcylpwovz255/slider_image_2.png?raw=1)

### 3. Get replies stats
![Get replies stats](https://www.dropbox.com/s/bgpngfxnh6i0ubv/slider_image_3.png?raw=1)

## Database structure

Database contains these tables:
- questions
  - id
  - description
  - topic_id
- answers
  - id
  - description
  - is_correct
  - question_id
- replies
  - id
  - question_id
  - user_id
  - is_correct
- topics
  - id
  - name
  - title
  - description
- users
  - id
  - prodiver
  - provider_id
  - email
  - name
  - nickname
  - avatar
  - remember_token

## Demo

Production site is located at  [quizr.frb.io/](https://quizr.frb.io/)

## Contact

For any feedback please email me at preshetin@gmail.com
