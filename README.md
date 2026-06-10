# TechLex

A DevOps learning project designed to demonstrate containerized application deployment using Docker, Docker Compose, MySQL, PHP, and Jenkins.

## Overview

TechLex is a simple technical terms dictionary web application. The main goal of this project was not only to build a web application, but also to gain hands-on experience with DevOps tools and workflows such as containerization, service orchestration, and CI/CD pipelines.

## Technologies Used

* PHP
* MySQL
* Docker
* Docker Compose
* Jenkins
* Git & GitHub

## Project Architecture

User Browser
→ PHP Web Application Container
→ MySQL Database Container

CI/CD Pipeline:
GitHub
→ Jenkins
→ Docker Build & Deployment

## Features

* Search for technical terms
* Retrieve definitions from a MySQL database
* Multi-container deployment using Docker Compose
* Automated build pipeline using Jenkins
* Containerized application environment

## Learning Outcomes

Through this project, we gained practical experience in:

* Creating Docker images
* Managing multi-container applications with Docker Compose
* Configuring MySQL containers
* Building and running CI/CD pipelines using Jenkins
* Debugging containerized applications
* Working collaboratively using Git and GitHub

## Team Members

* Mostafa Shawahneh
* Tala Shilleh

## Running the Project

```bash
docker compose up --build
```

After the containers start successfully, open:

http://localhost:8085

## Future Improvements

* Improve application security
* Add user authentication
* Implement environment variables for configuration
* Enhance the user interface
* Extend CI/CD automation

```
```
