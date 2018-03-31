#!/usr/bin/env python

from pymongo import MongoClient
import sys

client = MongoClient('localhost',27017)
db = client.biotech

template = [{$group: {_id : "$price", price : {$sum : "$price"}}}]

value = db.cart.aggregate(template)
print('<td>' + value + '</td>')