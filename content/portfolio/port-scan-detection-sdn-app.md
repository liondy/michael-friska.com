---
title: Port Scanning Detection SDN Application
date: 2021-05-21
hero: Michael
thumbnail: images/portfolio/sdn-port-scan.png
detail: images/portfolio/sdn-port-scan.png
service: Website, Terminal Apps, Python and PHP
client: CHW
shortDescription: This is Michael's Undergraduate Thesis. He's a cybersecurity enthusiast remember? He developed application that is able to detect port scanning activities in SDN network environment. The app is placed in SDN Controller. When the app detects abnormal activities, the app will capture and displays the activities on the web. This helps network administrator to identify what is happening on their network so that they could prevent further attacks.
challenge: Michael needs to capture all port scanning activities accross the network so that network administrator can easily monitor their networks.
solution: Michael finally managed to do that by developing a Python script. He used Pyshark library to capture network packets. By having the network packets, Michael can sort which packets were dangerous so that he could show it to web interface.

---
This project was for Michael's undergraduate thesis. He developed two kinds of application. One is a Python script to crawl network packets and the other is a web application to display port scanning activities. This application could not be hosted because the web application requires the Python script. This Python script must run in a SDN network environment.

Michael provides an open-source code in his Github too: https://github.com/liondy/SDN-Port-Scan-Detector