#!/usr/bin/env python

from pymongo import MongoClient
import sys

username = sys.argv[1]
client = MongoClient('localhost',27017)
db = client.biotech

template = {
				"username": username
				}

cursor = db.cart.find(template)

for document in cursor:
	print('<tr>')
	print('<td>' + '<img src=\"' + document['imgName'] + '\" height=\"100\" width=\"100\"/>' + document['proName'] + '</td>')
	print('<td>' + '$' + document['price'] + '</td>')
	print('<tr>')