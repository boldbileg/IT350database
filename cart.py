#!/usr/bin/env python

from pymongo import MongoClient
import sys

name = sys.argv[1]
price = sys.argv[2]
imgName = sys.argv[3]
username = sys.argv[4]

client = MongoClient('localhost',27017)
db = client.biotech

template = {
				"proName": name,
				"price": price,
				"imgName": imgName,
				"username": username
				}

db.cart.insert(template)