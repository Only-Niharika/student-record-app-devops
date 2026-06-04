pipeline {
    agent any

    environment {
        DB_HOST = 'student-record-db.ch6u6a6kwo23.ap-south-1.rds.amazonaws.com'
        DB_USER = 'admin'
        DB_PASSWORD = 'password123'
        DB_NAME = 'user_management'
    }

    stages {
        stage('Clone Code') {
            steps {
                git branch: 'main', url: 'https://github.com/Only-Niharika/student-record-app-devops.git'
            }
        }

        stage('Deploy Container') {
            steps {
                sh 'docker rm -f student_app || true'

                sh '''
                docker run -d \
                  --name student_app \
                  -p 8080:80 \
                  -v "$WORKSPACE":/var/www/html \
                  -e DB_HOST="$DB_HOST" \
                  -e DB_USER="$DB_USER" \
                  -e DB_PASSWORD="$DB_PASSWORD" \
                  -e DB_NAME="$DB_NAME" \
                  student-record-app
                '''
            }
        }

        stage('Verify Deployment') {
            steps {
                sh 'docker ps'
            }
        }
    }
}
