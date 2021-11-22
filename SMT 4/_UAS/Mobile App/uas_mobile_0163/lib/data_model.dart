

class DataModel {
  final int id;
  final String mrktv;
  final String seritv;
  final String tipeLayar;
  final String ukuranLayar;
  final String tinggiLayar;
  final String lebarLayar;

  DataModel({this.mrktv, this.seritv, this.tipeLayar, this.ukuranLayar, this.tinggiLayar, this.lebarLayar, this.id});

  Map<String, dynamic> toMap() {
    return <String, dynamic> {
      "id" : id,
      "mrktv" : mrktv,
      "seritv" : seritv,
      "tipelayar" : tipeLayar,
      "ukuranlayar" : ukuranLayar,
      "tinggilayar" : tinggiLayar,
      "lebarlayar" : lebarLayar
    };
  }
}