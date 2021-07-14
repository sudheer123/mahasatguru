pipeline {
    agent any
    stages {
        stage('check out') {
            steps {
                script {
                    git credentialsId: 'Gitghub', url: 'https://github.com/sudheer123/docker-compose.git'
                    sh "ls -lart ./*"
                    sh "git branch -a"
                    sh "git checkout master"
                }
            }
        }            
            }
        }
