Symfony Demo Application
========================

The demo app consists of a backend to manage blog posts and a frontend to show them.

Additionally, there are certain workloads that have to be done in the background for 
which the symfony/messenger component is used. The demo app has a typical symfony cli which can be used
to generate and consume work messages.

### How to run

minikube with tunel for ingress. Configure host for symfony.local

In helm chart symfony, values->args there are args for setup DB

Before that run mariadb

### IaC
Configure only idea
Use terrafrom module, setup gke autopilot cluster
Autoscaled

### Scaling inside cluster
Should work on normal kubernetes not minikube

### CI/CD

Testing on CI working, can be added step with building and pushing image

CD created just a concept 

### Monitoring 
Can be easely setup with prometheus stack (in charts repo)


