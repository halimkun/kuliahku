import 'package:flutter/material.dart';
import 'package:flutter/services.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Input Data Televisi 0163',
      theme: ThemeData(
        primarySwatch: Colors.deepPurple,
      ),
      home: MyHomePage(title: 'Input Data Televisi 0163'),
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
  final mrktv = TextEditingController();
  final seritv = TextEditingController();
  final tipelayar = TextEditingController();
  final ukuranlayar = TextEditingController();
  final tinggilayar = TextEditingController();
  final lebarlayar = TextEditingController();

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(widget.title),
      ),
      body: ListView(
        children: <Widget>[
          Container(
            padding: new EdgeInsets.all(15),
            child: Column(
              children: <Widget>[
                SizedBox(
                  height: 60,
                  child: TextField(
                    controller: mrktv,
                    decoration: InputDecoration(
                        border: OutlineInputBorder(),
                        labelText: "Merek Televisi"),
                  ),
                ),
                SizedBox(height: 15),
                SizedBox(
                  height: 60,
                  child: TextField(
                    controller: seritv,
                    decoration: InputDecoration(
                        border: OutlineInputBorder(),
                        labelText: "Seri Televisi"),
                  ),
                ),
                SizedBox(height: 15),
                SizedBox(
                  height: 60,
                  child: TextField(
                    controller: tipelayar,
                    decoration: InputDecoration(
                        border: OutlineInputBorder(), labelText: "Tipe Layar"),
                  ),
                ),
                SizedBox(height: 10),
                SizedBox(
                  height: 60,
                  child: TextField(
                    controller: ukuranlayar,
                    keyboardType: TextInputType.number,
                    decoration: InputDecoration(
                        border: OutlineInputBorder(),
                        labelText: "Ukuran Layar"),
                    inputFormatters: <TextInputFormatter>[
                      FilteringTextInputFormatter.digitsOnly,
                      LengthLimitingTextInputFormatter(4),
                    ],
                  ),
                ),
                SizedBox(height: 10),
                Row(
                  children: <Widget>[
                    new Flexible(
                      child: TextField(
                        controller: tinggilayar,
                        keyboardType: TextInputType.number,
                        decoration: InputDecoration(
                            border: OutlineInputBorder(),
                            labelText: "Tinggi Layar"),
                        inputFormatters: <TextInputFormatter>[
                          FilteringTextInputFormatter.digitsOnly,
                          LengthLimitingTextInputFormatter(4),
                        ],
                      ),
                    ),
                    SizedBox(width: 10),
                    new Flexible(
                      child: TextField(
                        controller: lebarlayar,
                        keyboardType: TextInputType.number,
                        decoration: InputDecoration(
                            border: OutlineInputBorder(),
                            labelText: "Lebar Layar"),
                        inputFormatters: <TextInputFormatter>[
                          FilteringTextInputFormatter.digitsOnly,
                          LengthLimitingTextInputFormatter(4),
                        ],
                      ),
                    ),
                  ],
                ),
                SizedBox(height: 10),
                ElevatedButton(
                  child: Text("Tampilkan Data"),
                  onPressed: () {
                    return showDialog<String>(
                      context: context,
                      builder: (BuildContext context) => AlertDialog(
                        title: Text("Detail Televisi"),
                        content: Column(
                          crossAxisAlignment: CrossAxisAlignment.stretch,
                          mainAxisSize: MainAxisSize.min,
                          children: <Widget>[
                            Text("Merek Televisi : " + mrktv.text),
                            Text("Seri Televisi : " + seritv.text),
                            Text("Tipe Layar : " + tipelayar.text),
                            Text("Ukuran Layar : " +
                                ukuranlayar.text +
                                "inch"),
                            Text("Resolusi Layar : " +
                                tinggilayar.text +
                                " x " +
                                lebarlayar.text),
                          ],
                        ),
                        actions: <Widget>[
                          TextButton(
                            onPressed: () =>
                              Navigator.pop(context, "Ok"),
                              child: Text("Ok"))
                        ],
                      )
                    );
                  },
                )
              ],
            ),
          ),
        ],
      ),
    );
  }
}
