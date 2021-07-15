import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:http/http.dart' as http;

import 'package:respon_2/main.dart';

class AddData extends StatefulWidget {
  @override
  _AddDataState createState() => new _AddDataState();

}

class _AddDataState extends State<AddData>{

  // Controller Text Fields
  TextEditingController ctipehp   = new TextEditingController();
  TextEditingController clayarhp  = new TextEditingController();
  TextEditingController cprochp   = new TextEditingController();
  TextEditingController cmeminthp = new TextEditingController();
  TextEditingController cramhp    = new TextEditingController();
  TextEditingController cbathp    = new TextEditingController();
  TextEditingController chargahp  = new TextEditingController();

  void addData() async {
    var url=Uri.parse('http://192.168.0.117/flutter-hp/add.php');

    await http.post(url, body: {
      "tipehp": ctipehp.text,
      "layarhp": clayarhp.text,
      "prochp": cprochp.text,
      "meminthp": cmeminthp.text,
      "ramhp": cramhp.text,
      "bathp": cbathp.text,
      "hargahp": chargahp.text
    });
  }

  @override
  Widget build(BuildContext context) {
    return new Scaffold(
      appBar: new AppBar(
        title: new Text("ADD DATA"),
      ),
      body: Padding(
        padding: const EdgeInsets.all(10.0),
        child: ListView(
          children: <Widget>[
            new Column(
              children: <Widget>[
                SizedBox(height: 10,),
                SizedBox(
                  height: 60,
                  child: new TextField(
                    controller: ctipehp,
                    decoration: new InputDecoration(
                        border: OutlineInputBorder(),
                        labelText: "Tipe Smartphone"),
                  ),
                ),
                SizedBox(height: 15,),
                SizedBox(
                  height: 60,
                  child: new TextField(
                    controller: clayarhp,
                    keyboardType: TextInputType.number,
                    decoration: new InputDecoration(
                        border: OutlineInputBorder(),
                        labelText: "Layar Smartphone"),
                  ),
                ),
                SizedBox(height: 15,),
                SizedBox(
                  height: 60,
                  child: new TextField(
                    controller: cprochp,
                    decoration: new InputDecoration(
                        border: OutlineInputBorder(),
                        labelText: "Processor"),
                  ),
                ),
                SizedBox(height: 15,),
                SizedBox(
                  height: 60,
                  child: new TextField(
                    controller: cmeminthp,
                    keyboardType: TextInputType.number,
                    inputFormatters: <TextInputFormatter>[
                      FilteringTextInputFormatter.digitsOnly
                    ],
                    decoration: new InputDecoration(
                        border: OutlineInputBorder(),
                        labelText: "Memory Internal"),
                  ),
                ),
                SizedBox(height: 15,),
                SizedBox(
                  height: 60,
                  child: new TextField(
                    controller: cramhp,
                    keyboardType: TextInputType.number,
                    inputFormatters: <TextInputFormatter>[
                      FilteringTextInputFormatter.digitsOnly
                    ],
                    decoration: new InputDecoration(
                        border: OutlineInputBorder(),
                        labelText: "Ram"),
                  ),
                ),
                SizedBox(height: 15,),
                SizedBox(
                  height: 60,
                  child: new TextField(
                    controller: cbathp,
                    keyboardType: TextInputType.number,
                    inputFormatters: <TextInputFormatter>[
                      FilteringTextInputFormatter.digitsOnly
                    ],
                    decoration: new InputDecoration(
                        border: OutlineInputBorder(),
                        labelText: "Baterai"),
                  ),
                ),
                SizedBox(height: 15,),
                SizedBox(
                  height: 60,
                  child: new TextField(
                    controller: chargahp,
                    keyboardType: TextInputType.number,
                    inputFormatters: <TextInputFormatter>[
                      FilteringTextInputFormatter.digitsOnly
                    ],
                    decoration: new InputDecoration(
                        border: OutlineInputBorder(),
                        labelText: "Harga Smartphone"),
                  ),
                ),
                new Padding(
                  padding: const EdgeInsets.all(10.0),
                ),
                new ElevatedButton(
                  child: new Text("Simpan Data"),
                  onPressed: () {
                    addData();
                    Navigator.push(context, MaterialPageRoute(
                      builder: (_) => Home()
                    ));
                  },
                )
              ],
            ),
          ],
        ),
      ),
    );
  }
}