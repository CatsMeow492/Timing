# Timing 10.10.11.135

Core Concepts:

## Enumeration

Alright, so at this point you've probably read some of my tutorials before (at least I hope if you're doing a medium box) so I'm going to be a little less verbose about enumeration when the steps are obvious.  From this point on you should probably know if nmap says port 80 is open we're checking for a website and blasting it with gobuster and wfuzz to find all the subdirecties.  

```
nmap -sV -sC 10.129.246.163 -o nmap.timing.txt
wget https://raw.githubusercontent.com/rbsec/dnscan/master/subdomains-10000.txt
wget https://raw.githubusercontent.com/danielmiessler/SecLists/master/Discovery/Web-Content/raft-small-words.txt
gobuster dir -u timing.htb -w subdomains-10000.txt -o gobuster.timing.txt
wfuzz -H "Host: FUZZ.timing.htb" -w subdomains-10000.txt --hh 290 --hc 302 http://timing.htb/ > fuzz.timing.txt
```
