import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:http/http.dart' as http;
import 'package:respon_2/main.dart';

class EditData extends StatefulWidget {

  final List list;
  final int index;

  const EditData({Key key, this.list, this.index}) : super(key: key);

  @override
  _EditDataState createState() => new _EditDataState();

}

class _EditDataState extends State<EditData>{

  // Controller Text Fields
  TextEditingController ctipehp;
  TextEditingController clayarhp;
  TextEditingController cprochp;
  TextEditingController cmeminthp;
  TextEditingController cramhp;
  TextEditingController cbathp;
  TextEditingController chargahp;

  void editData() async {
    var url=Uri.parse('http://192.168.0.117/flutter-hp/edit.php');

    await http.post(url, body: {
      "idhp": widget.list[widget.index]['idhp'],
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
  void initState(){
    var url   = Uri.parse('http://192.168.0.117/flutter-hp/edit.php');
    ctipehp   = new TextEditingController(text: widget.list[widget.index]['tipehp']);
    clayarhp  = new TextEditingController(text: widget.list[widget.index]['layarhp']);
    cprochp   = new TextEditingController(text: widget.list[widget.index]['prochp']);
    cmeminthp = new TextEditingController(text: widget.list[widget.index]['meminthp']);
    cramhp    = new TextEditingController(text: widget.list[widget.index]['ramhp']);
    cbathp    = new TextEditingController(text: widget.list[widget.index]['bathp']);
    chargahp  = new TextEditingController(text: widget.list[widget.index]['hargahp']);

    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return new Scaffold(
      appBar: new AppBar(
        title: new Text("EDIT DATA"),
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
                  child: new Text("Edit Data"),
                  onPressed: () {
                    editData();
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