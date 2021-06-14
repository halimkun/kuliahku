import 'package:flutter/material.dart';
import './kelas.dart';
import './mahasiswa.dart';

class Menu extends StatelessWidget
{
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Halaman Menu"),
        brightness: Brightness.dark
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget> [
            ButtonTheme(
              minWidth: 130,
              height: 35,
              child: RaisedButton(
              onPressed: (){
                Navigator.push(
                  context, 
                  MaterialPageRoute(
                    builder: (context) => Kelas(),  
                  )
                );
              },
              color: Colors.teal[400],
              child: Text(
                "Mata Kuliah",
                style: TextStyle(color: Colors.white),
              ),
            ),
            ),
            ButtonTheme(
              minWidth: 130,
              height: 35,
              child: RaisedButton(
              onPressed: (){
                Navigator.push(
                  context, 
                  MaterialPageRoute(
                    builder: (context) => Mahasiswa(),  
                  )
                );
              },
              color: Colors.teal[400],
              child: Text(
                "Mahasiswa",
                style: TextStyle(color: Colors.white),
              ),
            ),
            ),
          ],
        ),
      ),
    );
  }
  
}