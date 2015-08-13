
// @GENERATOR:play-routes-compiler
// @SOURCE:/home/matthew/Hospital-Management-System/website/conf/routes
// @DATE:Tue Aug 11 19:13:37 EDT 2015


package router {
  object RoutesPrefix {
    private var _prefix: String = "/"
    def setPrefix(p: String): Unit = {
      _prefix = p
    }
    def prefix: String = _prefix
    val byNamePrefix: Function0[String] = { () => prefix }
  }
}
