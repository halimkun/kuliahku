import 'dart:async';
import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:intl/intl.dart';
import 'package:http/http.dart' as http;

import './addData.dart';
import './detail.dart';

void main() {
  runApp(new MaterialApp(
    title: "SPESIFIKASI HP 0163",
    home: new Home(),
    theme: ThemeData(primarySwatch: Colors.deepPurple),
  ));
}

class Home extends StatelessWidget {

  Future<List> getData() async {
    final response = await http.get(
      Uri.parse('http://192.168.0.117/flutter-hp/get.php'));
    return json.decode(response.body);
  }

  @override
  Widget build(BuildContext context) {
    return new Scaffold(
      appBar: new AppBar(
        title: new Text("SPESIFIKASI HP 0163"),
      ),
      floatingActionButton: new FloatingActionButton(
          child: new Icon(Icons.add),
          onPressed: () => Navigator.of(context).push(
            new MaterialPageRoute(builder: (context) => new AddData()))
      ),
      body: new FutureBuilder<List>(
        future: getData(),
        builder: (context, snapshot) {
          if (snapshot.hasError) print(snapshot.error);
          return snapshot.hasData 
            ? new ItemList(list: snapshot.data) 
            : new Center( child: new CircularProgressIndicator());
        },
      ),
    );
  }
}

class ItemList extends StatelessWidget {
  final List list;
  final formatCurrency = new NumberFormat.simpleCurrency(
      locale: 'id_ID', name: "Rp ", decimalDigits: 0
  );

  ItemList({this.list});

  @override
  Widget build(BuildContext context) {
    return new ListView.builder(
      itemCount: list == null ? 0 : list.length,
      itemBuilder: (context, i) {
        return new Container(
          padding: const EdgeInsets.only(left: 10, right: 10),
          child: new GestureDetector(
            onTap: () => Navigator.of(context).push(new MaterialPageRoute(
                builder: (BuildContext context) => new Detail(list: list,index: i)
            )),
            child: new Card(
              child: new ListTile(
                leading: new Icon(Icons.phone_android),
                title: new Text(list[i]['tipehp'].toString().capitalize()),
                subtitle: new Text(
                    "${formatCurrency.format(int.parse(list[i]['hargahp']))}"),
              ),
            ),
          ),
        );
      },
    );
  }
}

extension StringExtension on String {
    String capitalize() {
      return "${this[0].toUpperCase()}${this.substring(1)}";
    }
}
