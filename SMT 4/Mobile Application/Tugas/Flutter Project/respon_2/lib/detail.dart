import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:intl/intl.dart';

import './main.dart';
import './editData.dart';

class Detail extends StatefulWidget {
  List list;
  int index;
  
  Detail({this.index, this.list});

  @override
  _DetailState createState() => new _DetailState();
}

class _DetailState extends State<Detail> {
  
  void deleteData() {
    var url = Uri.parse('http://192.168.0.117/flutter-hp/delete.php');
  
    http.post(url, body: {
      'idhp': widget.list[widget.index]['idhp']
    });
  }

  void confirm() {
    AlertDialog alertDialog = new AlertDialog(
      title: new Text("Konfirmasi !"),
      content: new Text("Apakah anda yakin ingin ingin menghapus data +'${widget.list[widget.index]['tipehp']}'"),
      actions: <Widget>[
        new TextButton(
          child: new Text("Batal", style: new TextStyle(color: Colors.black)),
          onPressed: () => Navigator.pop(context),
        ),
        new TextButton(
          child: new Text(
            "Yakin",
            style: new TextStyle(color: Colors.black45),
          ),
          onPressed: () {
            deleteData();
            Navigator.of(context).push(new MaterialPageRoute(
              builder: (BuildContext context) => new Home(),
            ));
          },
        ),
      ],
    );

    showDialog(
      context: context,
      builder: (context) => alertDialog,
    );
  }

  @override
  Widget build(BuildContext context) {
    
    final formatCurrency = new NumberFormat.simpleCurrency(
      locale: 'id_ID',
      name: "Rp ",
      decimalDigits: 0
    );

    return new Scaffold(
      appBar: new AppBar(
          title: new Text("${widget.list[widget.index]['tipehp']}")),
      body: new Container(
        height: 400.0,
        padding: const EdgeInsets.all(10.0),
        child: new Card(
          semanticContainer: true,
          child: new Center(
            child: new Column(
              children: <Widget>[
                new Padding(
                  padding: const EdgeInsets.only(top: 30.0),
                ),
                Container(
                  padding: EdgeInsets.only(bottom: 15.0),
                  child: new Text(
                    widget.list[widget.index]['tipehp'],
                    style: new TextStyle(fontSize: 30.0),
                  ),
                ),
                SizedBox(
                  width: double.infinity,
                  child: Container(
                    padding: EdgeInsets.only(left: 20.0),
                    child: new Text(
                      "Layar : ${widget.list[widget.index]['layarhp']}",
                      style: new TextStyle(fontSize: 18.0),
                      textAlign: TextAlign.left
                    ),
                  ),
                ),
                SizedBox(
                  width: double.infinity,
                  child: Container(
                    padding: EdgeInsets.only(left: 20.0),
                    child: new Text(
                      "Processor : ${widget.list[widget.index]['prochp']}",
                      style: new TextStyle(fontSize: 18.0),
                    ),
                  ),
                ),
                SizedBox(
                  width: double.infinity,
                  child: Container(
                    padding: EdgeInsets.only(left: 20.0),
                    child: new Text(
                      "Memory Internal : ${widget.list[widget.index]['meminthp']}",
                      style: new TextStyle(fontSize: 18.0),
                    ),
                  ),
                ),
                SizedBox(
                  width: double.infinity,
                  child: Container(
                    padding: EdgeInsets.only(left: 20.0),
                    child: new Text(
                      "RAM : ${widget.list[widget.index]['ramhp']}",
                      style: new TextStyle(fontSize: 18.0),
                    ),
                  ),
                ),
                SizedBox(
                  width: double.infinity,
                  child: Container(
                    padding: EdgeInsets.only(left: 20.0),
                    child: new Text(
                      "Baterai : ${widget.list[widget.index]['bathp']}",
                      style: new TextStyle(fontSize: 18.0),
                    ),
                  ),
                ),
                SizedBox(
                  width: double.infinity,
                  child: Container(
                    padding: EdgeInsets.only(left: 20.0),
                    child: new Text(
                      "Harga : ${formatCurrency.format(int.parse(widget.list[widget.index]['hargahp']))}",
                      style: new TextStyle(fontSize: 18.0),
                    ),
                  ),
                ),
                new Padding(
                  padding: const EdgeInsets.only(top: 30.0),
                ),
                new Row(
                  mainAxisSize: MainAxisSize.min,
                  children: <Widget>[
                    new ElevatedButton(
                      child: new Text("EDIT"),

                      onPressed: () =>
                          Navigator.of(context).push(new MaterialPageRoute(
                        builder: (BuildContext context) => new EditData(
                          list: widget.list,
                          index: widget.index,
                        ),
                      )),
                    ),
                    SizedBox(height: 10, width: 10,),
                    new TextButton(
                      style: TextButton.styleFrom(
                        primary: Colors.red.shade400
                      ),
                      child: new Text("DELETE"),
                      onPressed: () => confirm(),
                    ),
                  ],
                )
              ],
            ),
          ),
        ),
      ),
    );
  }
}
