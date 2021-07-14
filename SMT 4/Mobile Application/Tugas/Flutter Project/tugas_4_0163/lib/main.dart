
import 'package:flutter/material.dart';
import 'package:flutter/services.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Input Mobil 0163',
      theme: ThemeData(
        primarySwatch: Colors.orange,
      ),
      home: MyHomePage(title: 'Input Mobil 0163'),
    );
  }
}

class MyHomePage extends StatefulWidget {
  final String title;
  
  MyHomePage({Key key, this.title}) : super(key: key);

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {

   final cnm = TextEditingController();
   final cmm = TextEditingController();
   final cwm = TextEditingController();
   final ctm = TextEditingController();

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(widget.title),
      ),
      body: Container(
        padding: new EdgeInsets.all(15),
        child: Column(
          children: <Widget>[
            SizedBox(
              height: 60,
              child: TextField(
                 controller: cnm,
                  decoration: InputDecoration(
                     border: OutlineInputBorder(), labelText: "Nama Mobil"),
              ),
            ),
            SizedBox(height: 15),
            SizedBox(
              height: 60,
              child: TextField(
                 controller: cmm,
                  decoration: InputDecoration(
                    border: OutlineInputBorder(), labelText: "Merek Mobil"),
              ),
            ),
            SizedBox(height: 15),
            SizedBox(
              height: 60,
              child: TextField(
                 controller: cwm,
                  decoration: InputDecoration(
                    border: OutlineInputBorder(), labelText: "Warna Mobil"),
              ),
            ),
            SizedBox(height: 10),
            SizedBox(
              height: 60,
              child: TextField(
                 controller: ctm,
                  keyboardType: TextInputType.number,
                  decoration: InputDecoration(border: OutlineInputBorder(), labelText: "Tahun Mobil"),
                  inputFormatters: <TextInputFormatter>[
                     FilteringTextInputFormatter.digitsOnly,
                     LengthLimitingTextInputFormatter(4),
                  ],
              ),
            ),
            SizedBox(height: 10),
            ElevatedButton(
               child: Text("Tampilkan"),
               onPressed: (){
                  return showDialog<String>(
                     context: context,
                     builder: (BuildContext context) => AlertDialog(
                        title: Text("Detail Mobil"),
                        content: Column(
                           crossAxisAlignment: CrossAxisAlignment.stretch,
                           mainAxisSize: MainAxisSize.min,
                           children: <Widget>[
                              Text("Nama Mobil : " + cnm.text),
                              Text("Merek Mobil : " + cmm.text),
                              Text("Warna Mobil : " + cwm.text),
                              Text("Tahun Mobil : " + ctm.text),
                           ],
                        ),
                        actions: <Widget> [
                           TextButton(
                              onPressed: ()=>Navigator.pop(context, "Ok"), 
                              child: Text("Ok")
                           )
                        ],
                     )
                  );
               },
            )
          ],
        ),
      ),
    );
  }
}
