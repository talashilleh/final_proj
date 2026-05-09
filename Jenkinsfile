pipeline {
    agent any

    stages {

        stage('Clone Repository') {
            steps {
                git branch: 'main',
                url: 'https://github.com/talashilleh/final_proj.git'
            }
        }

        stage('Build Containers') {
            steps {
                sh 'docker compose down'
                sh 'docker compose up --build -d'
            }
        }

        stage('Show Running Containers') {
            steps {
                sh 'docker ps'
            }
        }

    }
}