#!/usr/bin/env python

from pymongo import MongoClient
import sys

username = sys.argv[1]
client = MongoClient('localhost',27017)
db = client.biotech

template = {
				"username": username
				}

db.cart.remove(template)